<?php
global $GO_FIELDS, $LANG;

// CODE CNEH
$GO_FIELDS['plugin_genericobject_cnehcodes_id']['name'] = $LANG['genericobject']['PluginGenericobjectBiomedical'][1];
$GO_FIELDS['plugin_genericobject_cnehcodes_id']['field'] = 'cnehcode';
$GO_FIELDS['plugin_genericobject_cnehcodes_id']['input_type'] = 'dropdown';

//  REFORME (yes or no)
$GO_FIELDS['reformed']['name'] = $LANG['genericobject']['PluginGenericobjectBiomedical'][2];
$GO_FIELDS['reformed']['input_type'] = 'bool';

// CLASSE CE (3 choix possibles 1,2a ou 2b)
$GO_FIELDS['plugin_genericobject_classeces_id']['name'] = $LANG['genericobject']['PluginGenericobjectBiomedical'][3];
$GO_FIELDS['plugin_genericobject_classeces_id']['field'] = 'classce';
$GO_FIELDS['plugin_genericobject_classeces_id']['input_type'] = 'dropdown';

// UF (Unité Fonctionnelle)
$GO_FIELDS['plugin_genericobject_ufs_id']['name'] = $LANG['genericobject']['PluginGenericobjectBiomedical'][4];
$GO_FIELDS['plugin_genericobject_ufs_id']['field'] = 'uf';
$GO_FIELDS['plugin_genericobject_ufs_id']['input_type'] = 'dropdown';

// PRESTATAIRE BIOMED
$GO_FIELDS['plugin_genericobject_prestataires_id']['name'] = $LANG['genericobject']['PluginGenericobjectBiomedical'][5];
$GO_FIELDS['plugin_genericobject_prestataires_id']['field'] = 'prestataire biomed';
$GO_FIELDS['plugin_genericobject_prestataires_id']['input_type'] = 'dropdown';

// TYPE D'EQUIPEMENT BIOMED
$GO_FIELDS['plugin_genericobject_typedequipementbiomeds_id']['name'] = $LANG['genericobject']['PluginGenericobjectBiomedical'][6];
$GO_FIELDS['plugin_genericobject_typedequipementbiomeds_id']['field'] = "type d 'equipement biomed";
$GO_FIELDS['plugin_genericobject_typedequipementbiomeds_id']['input_type'] = 'dropdown';

// Criticite
$GO_FIELDS['plugin_genericobject_criticites_id']['name'] = $LANG['genericobject']['PluginGenericobjectBiomedical'][7];
$GO_FIELDS['plugin_genericobject_criticites_id']['field'] = 'criticite';
$GO_FIELDS['plugin_genericobject_criticites_id']['input_type'] = 'dropdown';

// Numéro marquage CE
$GO_FIELDS['plugin_genericobject_marquageces_id']['name'] = $LANG['genericobject']['PluginGenericobjectBiomedical'][8];
$GO_FIELDS['plugin_genericobject_marquageces_id']['field'] = 'marquagece';
$GO_FIELDS['plugin_genericobject_marquageces_id']['input_type'] = 'dropdown';

// Classe électrique
$GO_FIELDS['plugin_genericobject_classeelecs_id']['name'] = $LANG['genericobject']['PluginGenericobjectBiomedical'][9];
$GO_FIELDS['plugin_genericobject_classeelecs_id']['field'] = 'classeelec';
$GO_FIELDS['plugin_genericobject_classeelecs_id']['input_type'] = 'dropdown';