<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="container">
    <h1>Products Information</h1>
    <form action="<?= base_url("products/store") ?>" method="post">
        <?php if (isset($product['id'])) : ?>
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <?php endif; ?>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required value="<?= isset($product['name']) ? $product['name'] : '' ?>">

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required value="<?= isset($product['price']) ? $product['price'] : '' ?>">

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required value="<?= isset($product['description']) ? $product['description'] : '' ?>">

        <label for="images">Year:</label>
        <input type="text" id="images" name="images" required value="<?= isset($product['images']) ? $product['images'] : '' ?>">

        <input type="submit" value="Save">
    </form>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['description'] ?></td>
                <td>
                    <a href="<?= base_url("products/delete/{$product['id']}") ?>" class="button delete-button">Delete</a>
                    <a href="<?= base_url("products/edit/{$product['id']}") ?>" class="button update-button">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection() ?>
