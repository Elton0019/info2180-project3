<? php
$host=getenv('IP');
$username=getenv('C9_USER')
$password='';
dbname= 'hireme'


try 
{
    $conn= new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO:ATTR_ERRMODE, PDO: :ERRMODE_EXCEPTION);
    if (isset($POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
    } catch (PDOException $e){
        die ('Could not connect');
    }
}

    $stmt= conn-> query("SELECT email,password FROM Users WHERE email= '$email'");
    $result= $stmt->fetchAll(PDO:FETCH_ASSOC);
    }
    header ('Location: http://'. $_SERVER['HTTP_HOST']. '/dashboard.html', true, 303);
    exit;
    ?>