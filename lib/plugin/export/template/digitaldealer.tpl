<?xml version="1.0" encoding="UTF-8" ?>
<Stock>
{foreach $autos as $auto}
 <vehicule>
  <id>{$auto.id}</id>
  <client>{$auto._code}</client>
  <marque><![CDATA[{$auto.marque}]]></marque>
  <modele><![CDATA[{$auto.modele}]]></modele>
  <version><![CDATA[{$auto.version|trim}]]></version>
  <annee>{$auto.annee}</annee>
  <energie>{$auto.energie}</energie>
  <places>{$auto.place}</places>
  <portes>{$auto.porte}</portes>
  <km>{$auto.km}</km>
  <couleur><![CDATA[{$auto.couleur}]]></couleur>
  <vitesse><![CDATA[{$auto.vitesse}]]></vitesse>
  <rapports>{$auto.rapport}</rapports>
  <prix>{$auto.prix}</prix>
  <garantie><![CDATA[{$auto.garantie}]]></garantie>
  <cat>{$auto.cat|lang:'flux':'cat'}</cat>
  <option><![CDATA[{$auto.option}]]></option>
  <photo>{$auto.photo}</photo>
  <concession><![CDATA[{$auto._title}]]></concession>
  <adresse><![CDATA[{$auto._adresse}]]></adresse>
  <zipcode>{$auto._zipcode}</zipcode>
  <city>{$auto._city}</city>
  <phone>{$auto._phone}</phone>
 </vehicule>
{/foreach}
</Stock>