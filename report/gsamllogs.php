<?php
/**
 * Copyright (C) 2010  Blackboard Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://opensource.org/licenses/gpl-3.0.html.
 *
 * @copyright  Copyright (c) 2009 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://opensource.org/licenses/gpl-3.0.html     GNU Public License
 */
 
/**
 * A report for viewing the auth/gsaml actions for debugging and testing purposes
 *
 * watches for logs such as this
 * add_to_log(SITEID, 'auth_gsaml', 'process samlrequest','','255 chars of info here', 0,0);
 *
 * @package auth_gsaml
 * @author Chris Stones
 */
class auth_gsaml_report_gsamllogs extends mr_report_abstract {

    /**
     * Report's init routine
     *
     * @return void
     */
    public function init() {
        $this->config->set(array(
            'export' => '**',
            'perpage' => true,
            'perpageopts' => array('all', 1, 5, 10, 50,100),
        ));
    }

    /**
     * The component string, used for get_string() calls
     *
     * @return string
     */
    public function get_component() {
        return 'auth_gsaml';
    }

    /**
     * Table setup
     *
     * @return void
     */
    public function table_init() {
        $this->url->params(array('controller' => 'default', 'action' => 'logs'));
        $this->table = new mr_html_table($this->preferences, $this->url, 'time');
        $this->table->add_column('id',     get_string('id',    'auth_gsaml'))
                    ->add_column('time',   get_string('time',  'auth_gsaml'))
                    ->add_column('userid', get_string('userid','auth_gsaml'))
                    ->add_column('ip',     get_string('ip',    'auth_gsaml'))
                    ->add_column('course', get_string('course','auth_gsaml'))
                    ->add_column('cmid',   get_string('cmid',  'auth_gsaml'))
                    ->add_column('action', get_string('action','auth_gsaml'))
                    ->add_column('info',   get_string('info',  'auth_gsaml'));
    }



    /**
     * A hook into the rendering of the table.
     *
     * If you need to wrap the table in a form or anything
     * like that, then use this method.
     *
     * @param string $tablehtml The rendered table HTML
     * @return string
     */
    public function output_wrapper($tablehtml) {
        $head = '<span class="widereportbox">';
        $tail = '</span>';
        return $head.$tablehtml.$tail;
    }

    
    /**
     * Add a row to the table
     *
     * @param mixed $row The row to add
     * @return void
     */
    public function table_fill_row($row) {
        $row->time = userdate($row->time);
        $this->table->add_row($row);
    }


    /**
     * Filter setup
     *
     * @return void
     */
    public function filter_init() {
        $this->filter = new mr_html_filter($this->preferences, $this->url);
        $this->filter->new_text('info', 'Info');
        $this->filter->new_text('userid','userid');
        $this->filter->new_text('course', 'course');
        $this->filter->new_daterange('time', 'Times');
    }


    /**
     * Pull logs only from auth/gsaml actions
     */
    public function get_sql($fields, $filtersql, $filterparams) {
        global $CFG,$SESSION;

        $sql = '';

        $select = "SELECT ".$fields;
        $from   = "FROM {log}";
        $where  = "WHERE module='auth_gsaml' ";

        // if filter sql exists..
        if (!empty($filtersql)) {
            $where .= " AND $filtersql";
        }

        $sql = $select.' '.$from.' '.$where;
        return array($sql,$filterparams);
    }

     /**
      *
      * @return <type>
      */
     function get_fsql() {
        return $this->fsql;
     }
}

