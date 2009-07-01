<?php
/*
 ----------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2008 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org/
 ----------------------------------------------------------------------

 LICENSE

	This file is part of GLPI.

    GLPI is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    GLPI is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with GLPI; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ------------------------------------------------------------------------
*/

// Original Author of file: Walid Nouh
// Purpose of file:
// ----------------------------------------------------------------------
function plugin_genericobject_showDeviceTypeLinks($target,$ID)
{
	global $LANG,$CFG_GLPI, $GENERICOBJECT_LINK_TYPES;
	$object_type = new PluginGenericObjectType;
	$object_type->getFromDB($ID);
	
	$links = plugin_genericobject_getLinksByType($object_type->fields["device_type"]);

	echo "<form name='form_links' method='post' action=\"$target\">";
	echo "<div class='center'>";
	echo "<table class='tab_cadre_fixe'>";
	echo "<input type='hidden' name='ID' value='$ID'>";
	echo "<tr class='tab_bg_1'><th>";
	echo $LANG['genericobject']['links'][1]."</th></tr>";

	echo "<tr class='tab_bg_1'>";
	echo "<td align='center'>";
	echo "<select name='link_device_type[]' multiple size='10' width='40'>";
	$commonitem = new CommonItem;
	
	foreach($GENERICOBJECT_LINK_TYPES as $link)
	{
		$commonitem->setType($link);
		echo "<option value='$link' ".(in_array($link,$links)?"selected":"").">" . $commonitem->getType() . "</option>\n";
	}
	echo "</select>";
	echo "</td></tr>";

	echo "<tr class='tab_bg_1'>";
	echo "<td align='center'>";
	echo "<input type='submit' name='update_links_types' value=\"" . $LANG['buttons'][7] . "\" class='submit'>";
	echo "</td></tr>";
	
	echo "</table></div></form>";
}

function plugin_genericobject_getLinksByType($device_type)
{
	global $DB;
	$query = "SELECT destination_type FROM `glpi_plugin_genericobject_type_links` WHERE device_type=$device_type";
	$result = $DB->query($query);
	$types = array();
	while ($datas = $DB->fetch_array($result))
		$types[] = $datas["destination_type"];
	return $types;	
}

function plugin_genericobject_getLinksByTypeAndID($name,$device_id)
{
	global $DB;
	$query = "SELECT * FROM `".plugin_genericobject_getLinkDeviceTableName($name)."` " .
			"WHERE source_id=$device_id";
	$result = $DB->query($query);
	$types = array();
	while ($datas = $DB->fetch_array($result))
		$types[] = $datas["destination_type"];
	return $types;	
}

function plugin_genericobject_linkedDeviceTypeExists($device_type,$destination_type)
{
	global $DB;
	$query = "SELECT COUNT(*) FROM `glpi_plugin_genericobject_type_links` WHERE device_type='$device_type' AND destination_type='$destination_type'";
	$result = $DB->query($query);
	if ($DB->result($result,0,0))
		return true;
	else
		return false;	
}

function plugin_genericobject_addNewLinkedDeviceType($device_type,$destination_type)
{
	if (!plugin_genericobject_linkedDeviceTypeExists($device_type,$destination_type))
	{
		$link_type = new PluginGenericObjectLink;
		$input["device_type"] = $device_type;
		$input["destination_type"] = $destination_type;
		$link_type->add($input);
	}
}

function plugin_genericobject_deleteAllLinkedDeviceByType($device_type)
{
	global $DB;
	$DB->query("DELETE FROM `glpi_plugin_genericobject_type_links` WHERE device_type='$device_type'");
}


function plugin_genericobject_showLinkedDeviceByID($device_type,$device_id)
{
	
}
?>