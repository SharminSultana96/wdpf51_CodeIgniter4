<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Details</th>
            <th>Product Price</th>
        </tr>

        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id']; ?></td>
                <td><?= $product['product_name']; ?></td>
                <td><?= $product['product_details']; ?></td>
                <td><?= $product['product_price']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="pagination justify-content-center">
        <?php if ($pager) : ?>
            <?php $pagi_path = 'index.php/list'; ?>
            <?php $pager->setPath($pagi_path) ; ?>
            <?= $pager->links() ?>

        <?php endif; ?>

        <nav aria-lebel="Page navigation example">
            <ul class="pagination">
                <?php if ($pager) : ?>
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    

                    <?php $pagi_path ='index.php/list'; ?>
                    <?php $pager->setPath($pagi_path) ; ?>
                    <?= $links = $pager->links() ?>
                    <?php endif; ?>

            </ul>
            
        </nav>

    <?php 
    // echo "<pre>";
    // print_r($products)
    ?> 
</body>
</html>