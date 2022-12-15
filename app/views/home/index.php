<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div>
        <h1><button onclick="" >Расписание </button></h1>


        <?php
        $path = __DIR__ . '/../../core/App.php';
        require_once($path);

        function select(){
            return new App('timetableController');
        }
        function insert(){
            return new App('timetableController');
        }

        ?>

        <form >
            <input type="submit" name="insert" value="insert" onclick="insert()" />
            <input type="submit" name="select" value="select" onclick="select()" />
        </form>
    </div>
</body>
</html>