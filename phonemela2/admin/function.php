<?php
function Navigation($page,$max_results,$table,$where,$order_by,$asc="ASC",$add_url)
{
//echo"<div style=\"display:block\">";
$max_results=intval($max_results);
$from = (($page * $max_results) - $max_results);
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM $table where $where order by  $order_by $asc"),0);
$total_pages = ceil($total_results / $max_results);
$page_url=$_SERVER["PHP_SELF"];
if($page > 1)
         {
         $prev = ($page - 1);
         echo("<a href=\"$page_url?page=$prev&$add_url\"> &lt;&lt;Prev </a> ");
         }
echo "Page $page of $total_pages \tor input ";?>
<input type="number" id="pn" />
<input type="button" value="Go" onclick="location.href='<?php echo "$page_url?page=";?>'+document.getElementById('pn').value+'<?php echo "";?>'" />
<?php
if($page < $total_pages)
         {
         $next = ($page + 1);
         echo("<a href=\"$page_url?page=$next&$add_url\"> Next>>  </a>");
         }
		 //echo "</div>";
}?>