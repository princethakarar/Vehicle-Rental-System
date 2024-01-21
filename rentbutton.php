session_start();

$id = $_POST['record'];

if(isset($_SESSION["name"]))
{
    echo "<a href="#cars" onclick="toggle(); getinfo($id)" class="btn">Rent Now</a>";
}
else{
    echo "<a href="login.php" class="btn">Rent Now</a>";
}