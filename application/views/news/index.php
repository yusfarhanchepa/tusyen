<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>
        

<button><a href="<?php echo site_url('news/create'); ?>">New article</a></button>

<table style="width:100%">
        <tr>
                <td>TITLE</td>
                <td>TEXT</td>
                <td>View Article based on slug</td>
                <td>Delete based on id</td>
        </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
                <td><?php echo $news_item['title']; ?></td>
                <td><?php echo $news_item['text']; ?></td>
                <td><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></td>
                <td><a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
</table>

<!-- <?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?> -->

</body>
