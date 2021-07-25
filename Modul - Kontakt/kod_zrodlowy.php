<?php
	function z_bazy($dane){
	$db = JFactory::getDbo();
	$query = $db->getQuery(true);
	$query->select($dane);
	$query->from($db->quoteName('#__contact_details'));
	$query->where($db->quoteName('name')." = ".$db->quote("Dane kontaktowe"));
	$db->setQuery($query);
	$result = $db->loadResult();
	return $result;
	};
?>
<div id="kontakt_dane">
<h3>Adres</h3>
<p>
<?php
	print z_bazy("postcode")." ";
	print z_bazy("suburb");
	print (", ");
	print ("ul. ");
	print z_bazy("address");
?>
</p>
<h3>Telefon</h3>
<p>
<?php
	print z_bazy("telephone");
?>
</p>
<h3>E-Mail</h3>
<p>
<?php
	print z_bazy("email_to");
?>
</p>
</div>