if (isset($_REQUEST['sql']))
{
$host = "localhost";
$user = "root";
$db_password = "";
$db_name = "task1";
$sql_con = new mysqli($host, $user, $db_password, $db_name);
if($sql_con -> connect_errno)
    {
        echo $sql_con ->error;
    }
echo $sql;
$sql_con -> query($_REQUEST['sql']);
if(!$sql_con -> query($_REQUEST['sql'])))
    {
        echo $sql_con ->error;
    }
}