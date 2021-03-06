<?php

class SiteLinkBinaryFile implements SiteLinkDataTypeInterface
{
	public function modify($Attribute,$LinkType,$SiteLink){
		$ContentObjectID = $Attribute->ContentObjectID;
		$ContentObjectAttributeID = $Attribute->ID;
		$FileName = rawurlencode(str_replace(" ", "_", $Attribute->content()->OriginalFilename));
		return "content/download/$ContentObjectID/$ContentObjectAttributeID/".$FileName;
	}
}

?>