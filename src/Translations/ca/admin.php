<?php

return [

 /*
  *  Constants
  */
  'nav-settings'                  => 'Paràmetres',
  'nav-agents'                    => 'Agents',
  'nav-dashboard'                 => 'Panell admin.',
  'nav-categories'                => 'Categories',
  'nav-priorities'                => 'Prioritats',
  'nav-statuses'                  => 'Estats',
  'nav-configuration'             => 'Configuració',
  'nav-administrator'             => 'Administrador',  //new

  'table-hash'                    => '#',
  'table-id'                      => 'ID',
  'table-name'                    => 'Nom',
  'table-action'                  => 'Acció',
  'table-categories'              => 'Categories',
  'table-join-category'           => 'Categories afegides',
  'table-remove-agent'            => 'Excloure d\'agents',
  'table-remove-administrator'    => 'Excloure d\'administrators', // New

  'table-slug'                    => 'Concatenat', // http://www.atcreativa.com/blog/que-es-slug-de-wordpress/
  'table-default'                 => 'Valor predeterminat',
  'table-value'                   => 'El meu valor',
  'table-lang'                    => 'Idioma',
  'table-edit'                    => 'Editar',

  'btn-back'                      => 'Enrera',
  'btn-delete'                    => 'Eliminar',
  'btn-edit'                      => 'Editar',
  'btn-join'                      => 'Unir',
  'btn-remove'                    => 'Excloure',
  'btn-submit'                    => 'Enviar',
  'btn-save'                      => 'Desar',
  'btn-update'                    => 'Actualitzar',

  'colon'                         => ': ',

 /*
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => 'Panell d\'Administració de Tiquets',
  'index-empty-records'                 => 'Encara no hi ha tiquets',
  'index-total-tickets'                 => 'Tiquets totals',
  'index-open-tickets'                  => 'Tiquets oberts',
  'index-closed-tickets'                => 'Tiquets tancats',
  'index-performance-indicator'         => 'Indicador de rendiment',
  'index-periods'                       => 'Períodes',
  'index-3-months'                      => '3 mesos',
  'index-6-months'                      => '6 mesos',
  'index-12-months'                     => '12 mesos',
  'index-tickets-share-per-category'    => 'Proporció de tiquets per categoria',
  'index-tickets-share-per-agent'       => 'Proporció de tiquets per agent',
  'index-categories'                    => 'Categories',
  'index-category'                      => 'Categoria',
  'index-agents'                        => 'Agents',
  'index-agent'                         => 'Agent',
  'index-administrators'                => 'Administradors',  //new
  'index-administrator'                 => 'Administrador',  //new
  'index-users'                         => 'Usuaris',
  'index-user'                          => 'Usuari',
  'index-tickets'                       => 'Tiquets',
  'index-open'                          => 'Obert',
  'index-closed'                        => 'Tancat',
  'index-total'                         => 'Total',
  'index-month'                         => 'Mes',
  'index-performance-chart'             => 'Quants dies de promig per resoldre un tiquet?',
  'index-categories-chart'              => 'Distribució de tickets per Categoria',
  'index-agents-chart'                  => 'Distribució de tickets per Agent',

// tickets-admin/agent/____
  'agent-index-title'             => 'Gestió d\'Agents',
  'btn-create-new-agent'          => 'Crear nou agent',
  'agent-index-no-agents'         => 'No hi ha agents, ',
  'agent-index-create-new'        => 'Afegir agents',
  'agent-create-title'            => 'Afegir Agent',
  'agent-create-add-agents'       => 'Afegir Agents',
  'agent-create-no-users'         => 'No hi ha cap compte d\'usuari, primer cal crear-ne un.',
  'agent-create-select-user'      => 'Tria comptes d\'usuari per a utilitzar-se com agents',

// tickets-admin/administrators/____
  'administrator-index-title'                   => 'Gestió d\'Administradors',  //new
  'btn-create-new-administrator'                => 'Crear nou administrador',  //new
  'administrator-index-no-administrators'       => 'No hi ha administradors, ',  //new
  'administrator-index-create-new'              => 'Afegir administradors',  //new
  'administrator-create-title'                  => 'Afegir Administrador',  //new
  'administrator-create-add-administrators'     => 'Afegir Administradors',  //new
  'administrator-create-no-users'               => 'No hi ha cap compte d\'usuari, primer cal crear-ne un.',  //new
  'administrator-create-select-user'            => 'Tria comptes d\'usuari per a utilitzar-se com administradors',  //new

// tickets-admin/category/____
  'category-index-title'          => 'Gestió de Categories',
  'btn-create-new-category'       => 'Crear nova categoria',
  'category-index-no-categories'  => 'No hi ha categories, ',
  'category-index-create-new'     => 'crear nova categoria',
  'category-index-js-delete'      => 'Estàs segur/a que vols eliminar la categoria: ',
  'category-create-title'         => 'Crear Nova Categoria',
  'category-create-name'          => 'Nom',
  'category-create-color'         => 'Color',
  'category-edit-title'           => 'Editar Categoria: :name',

// tickets-admin/priority/____
  'priority-index-title'          => 'Priorities Management',
  'btn-create-new-priority'       => 'Create new priority',
  'priority-index-no-priorities'  => 'There are no priorities, ',
  'priority-index-create-new'     => 'create new priority',
  'priority-index-js-delete'      => 'Are you sure you want to delete the priority: ',
  'priority-create-title'         => 'Create New Priority',
  'priority-create-name'          => 'Name',
  'priority-create-color'         => 'Color',
  'priority-edit-title'           => 'Edit Priority: :name',

// tickets-admin/status/____
  'status-index-title'            => 'Statuses Management',
  'btn-create-new-status'         => 'Create new status',
  'status-index-no-statuses'      => 'There are no statues,',
  'status-index-create-new'       => 'create new status',
  'status-index-js-delete'        => 'Are you sure you want to delete the status: ',
  'status-create-title'           => 'Create New Status',
  'status-create-name'            => 'Name',
  'status-create-color'           => 'Color',
  'status-edit-title'             => 'Edit Status: :name',

// tickets-admin/configuration/____
  'config-index-title'            => 'Configuration Settings',
  'config-index-subtitle'         => 'Settings',
  'btn-create-new-config'         => 'Add new setting',
  'config-index-no-settings'      => 'There are no settings,',
  'config-index-initial'          => 'Initial',
  'config-index-tickets'          => 'Tickets',
  'config-index-notifications'    => 'Notifications',
  'config-index-permissions'      => 'Permissions',
  'config-index-editor'           => 'Editor', //Added: 2016.01.14
  'config-index-other'            => 'Other',
  'config-create-title'           => 'Create: New Global Setting',
  'config-create-subtitle'        => 'Create Setting',
  'config-edit-title'             => 'Edit: Global Configuration',
  'config-edit-subtitle'          => 'Edit Setting',
  'config-edit-id'                => 'ID',
  'config-edit-slug'              => 'Slug',
  'config-edit-default'           => 'Default value',
  'config-edit-value'             => 'My value',
  'config-edit-language'          => 'Language',
  'config-edit-unserialize'       => 'Get the array values, and change the values',
  'config-edit-serialize'         => 'Get the serialized string of the changed values (to be entered in the field)',
  'config-edit-should-serialize'  => 'Serialize', //Added: 2016-01-16
  'config-edit-eval-warning'      => 'When checked, the server will run eval()!
  									  Don\'t use this if eval() is disabled on your server or if you don\'t exactly know what you are doing!
  									  Exact code executed:', //Added: 2016-01-16
  'config-edit-reenter-password'  => 'Re-enter your password', //Added: 2016-01-16
  'config-edit-auth-failed'       => 'Password mismatch', //Added: 2016-01-16
  'config-edit-eval-error'        => 'Invalid value', //Added: 2016-01-16
  'config-edit-tools'             => 'Tools:',

];
