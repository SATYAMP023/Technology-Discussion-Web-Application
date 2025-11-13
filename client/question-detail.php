<div class="container">
    <h1 class="heading">Questions</h1>
    <div class="row">
        <div class="col-8">
        <?php
        include("./common/db.php");
        $query = "select * from questions where id = $qid";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $cid = $row['category_id'];
        echo "<h4 class='margin-bottom-15 question-title'>Question: ".$row['title']."</h4>
        <p class='margin-bottom-15'>".$row['description']."</p>";
        include("answers.php");
        ?>
        <form action="./server/requests.php" method="POST">
            <input type="hidden" name="question_id" value="<?php echo $qid ?>">
            <textarea name="answer" class="form-control margin-bottom-15" placeholder="Your answer..."></textarea>
            <button class="btn btn-primary">submit</button>
        </form>
    </div>
    <div class="col-4">
        <?php
        $categoryquery = "select category from category where id = $cid";
        $categoryresult = $conn->query($categoryquery);
        $categoryrow = $categoryresult->fetch_assoc();
        echo "<h1 class='heading'>".ucfirst($categoryrow['category'])."</h1>";

        $query = "select * from questions where category_id = $cid and id!=$qid";
        $result = $conn->query($query);
        foreach($result as $row)
        {
            $title = ucfirst($row['title']);
            $id = $row['id'];
            echo "<div class='row question-list'>
            <h4> <a href='?q-id=$id'> $title </a> </h4>
            </div>";
        }
        ?>
    </div>
    </div>
</div>