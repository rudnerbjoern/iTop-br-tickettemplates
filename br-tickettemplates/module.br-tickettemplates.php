<?php

/**
 * @copyright   Copyright (C) 2025 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2025-04-11
 *
 * iTop module definition file
 */

SetupWebPage::AddModule(
    __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
    'br-tickettemplates/0.0.1',
    array(
        // Identification
        //
        'label' => 'Datamodel: Ticket Templates',
        'category' => 'business',

        // Setup
        //
        'dependencies' => array(
            'itop-config-mgmt/3.2.0',
            'itop-tickets/3.2.0',
            'itop-change-mgmt-itil/3.2.0',
            'itop-request-mgmt-itil/3.2.0',
            'itop-incident-mgmt-itil/3.2.0',
        ),
        'mandatory' => false,
        'visible' => true,

        // Components
        //
        'datamodel' => array(),
        'webservice' => array(),
        'data.struct' => array(
            // add your 'structure' definition XML files here,
        ),
        'data.sample' => array(
            // add your sample data XML files here,
        ),

        // Documentation
        //
        'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
        'doc.more_information' => '', // hyperlink to more information, if any

        // Default settings
        //
        'settings' => array(
            'ticket_defaults' => array(
                'org_id' => '2',
            ),
            'change_defaults' => array(
                'org_id' => '2',
                'description' => '<p>Default Change Template 1...</p><p>Template 2...</p>',
                'supervisor_group_id' => '0',
                'supervisor_id' => '0',
                'manager_group_id' => '0',
                'manager_id' => '0',
                'routine_change' => array(
                    'description' => '<p>Routine Change Template 1...</p>',
                    'supervisor_group_id' => '0',
                    'supervisor_id' => '0',
                    'manager_group_id' => '0',
                    'manager_id' => '0',
                ),
                'normal_change' => array(
                    'description' => '<p>Normal Change Template 1...</p>',
                    'supervisor_group_id' => '0',
                    'supervisor_id' => '0',
                    'manager_group_id' => '0',
                    'manager_id' => '0',
                ),
                'emergency_change' => array(
                    'description' => '<p>Emergency Change Template 1...</p>',
                    'supervisor_group_id' => '0',
                    'supervisor_id' => '0',
                    'manager_group_id' => '0',
                    'manager_id' => '0',
                ),
            ),
        ),
    )
);
