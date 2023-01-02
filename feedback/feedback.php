<?php include 'inc/header.php'; ?>

<?php

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Feedback</h2>

<?php if (empty($feedbacks)) : ?>
    <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedbacks as $feed) : ?>
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <?php echo $feed['feedback']; ?>
            <div class="text-secondary mt-2">
                By <?php echo $feed['name']; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php include 'inc/footer.php'; ?>