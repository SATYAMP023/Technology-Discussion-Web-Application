<div class="container" id="cont">
    <div class="row">
        <div class="col-8">
            <h1 class="heading">Questions</h1>
            <?php
    include('./common/db.php');
    if(isset($_GET['c-id'])){
        $query = "select * from questions where category_id = $cid";
    }
    else if(isset($_GET['u-id'])){
        $query = "select * from questions where user_id = $uid";
    }
    else if(isset($_GET['latest'])){
        $query = "select * from questions order by id desc";
    }
    else if(isset($_GET['search'])){
        $searchterm = $conn->real_escape_string($_GET['search']);
        $query = "select * from questions where `title` LIKE '%$searchterm%'";
    }
    else{
        $query = "select * from questions";
    }
    $result = $conn->query($query);
    foreach($result as $row)
    {
        $title = ucfirst($row['title']);
        $id = $row['id'];
        echo "<div class='row question-list'>
        <h4 class='my-questions'> <a href='?q-id=$id'> $title </a>";
        echo isset($uid)?"<a href='./server/requests.php?delete=$id'>Delete</a>":NULL;
        echo "</h4></div>";
    }
    ?>
        </div>
    <div class="col-4">
        <?php
        include('category-list.php');
        ?>
    </div>
</div>
    
</div>