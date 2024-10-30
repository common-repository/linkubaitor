<?php

/*

Plugin Name: Linkubaitor

Version: 1.2

Plugin URI: http://linkubaitor.com

Description: Linkubaitor gives your readers simple HTML code at the bottom of every post to copy and paste into their webpage so they can link back to your posts. Links or "backlinks" are an important factor used in SEO (search engine optimization) to increase your sites overall search engine rank by increasing the link popularity to your site or blog. IDEAS FOR GOOD LINK BAIT: 1) Top Ten Lists 2) Tutorials 3) Product/Service Comparisons 4) Any Type of List 6) Using Bullets (easier for the average human to digest) 5) Using Linkubaitor

Author: Jae Jans

Author URI: http://automatic.fm

    Copyright 2009  Linkubaitor  (email : public@automatic.fm)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function linkubaitor($content) 

{

global $post;

$lr_permalink = get_permalink($post->ID);

$lr_title = get_the_title($post->ID);

	if ( !is_feed() && !is_page() && !is_front_page() ) {

		$content .= '<div align="center" style="border:1px solid #999999;background:#DFFFA5;color:#000000;padding:7px;margin:10px;font-size:11px">

      <div style="float:left;width:40%;text-align:left;color:#000000"><div style="font-size:13px;color:#000000;"><strong>Link To This Page</strong></div>1. <em><strong>Click</strong> inside the codebox</em><br />2. <em><strong>Right-Click then Copy</strong></em><br />3. <em><strong>Paste</strong> the HTML code into your webpage</em></div>

      <div style="float:right;width:60%;color:#000000;"><strong>codebox</strong><textarea name="' . $lr_title . '" rows="" cols="" style="width:90%;height:40px;overflow-y:auto;overflow-x:hidden;font-family:arial,times,courier;font-size:10px" readonly="readonly" onclick="this.focus(); this.select();">&lt;a href=&quot;' . $lr_permalink . '&quot;&gt;' . $lr_title . '&lt;/a&gt;</textarea>

  <div align="right" style="font-family:arial,times,courier;font-size:9px;color:#000000;">powered by <a href="http://linkubaitor.com" title="HTML Code Link Bait Wordpress Plugin by The Coolest Guy On The Planet Earth" target="_blank">Linkubaitor</a></div>  </div><div style="clear:both"></div></div>'; }

	return $content;

}

add_filter('the_content', 'linkubaitor');

?>