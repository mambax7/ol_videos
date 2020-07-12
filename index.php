<?php
// $Id: index.php,v 1 2004/07/18 14:45:56 buennagel Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
require('header.php');

include(XOOPS_ROOT_PATH.'/header.php');



//  $handle = fopen("http://www.onlineludhiana.com/portal/html/asdfdsaqwertfbghnkhk9079077l89y983rh/videos.php","r");
//  $i=1;
//  while(!feof($handle))
//  {
//  $str = fgets($handle, 1000);
//  echo "$str";
//  $i++;
//  }
//  fclose($handle);

print '<IFRAME SRC="http://www.onlineludhiana.com/portal/html/asdfdsaqwertfbghnkhk9079077l89y983rh/videos.php" WIDTH=650 HEIGHT=1500 TITLE="Watch Videos"></IFRAME>';

// Den Seitenfuß einbeziehen.
include(XOOPS_ROOT_PATH.'/footer.php');
?>