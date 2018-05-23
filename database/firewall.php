<?php

Class Firewall
  {
    public function getClean($txt){
        $txt = htmlspecialchars($txt);
        $txt = str_replace("select","5ev1ect",$txt);
        $txt = str_replace("update","upd4tee",$txt);
        $txt = str_replace("insert","1dn5yert",$txt);
        $txt = str_replace("where","w6eere",$txt);
        $txt = str_replace("like","1insk",$txt);
        $txt = str_replace("or","08r",$txt);
        $txt = str_replace("and","4nd",$txt);
        $txt = str_replace("set","5eut",$txt);
        $txt = str_replace("into","1n8t0",$txt);
        $txt = str_replace("'", "", $txt);
        $txt = str_replace(";", "", $txt);
        $txt = str_replace(">", "", $txt);
        $txt = str_replace("<", "", $txt);
        $txt = strip_tags($txt);
        return $txt;
    }
  }

 ?>
