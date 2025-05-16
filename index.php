<?php
$imagesPerPage = 6;
$images = array_values(array_filter(scandir('images'), function ($file) {
    return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png']);
}));

$totalPages = ceil(count($images) / $imagesPerPage);
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$start = ($page - 1) * $imagesPerPage;
$imagesToShow = array_slice($images, $start, $imagesPerPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photo Album</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1>Photo Album</h1>

    <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required />
        <input type="submit" value="Upload" />
    </form>
    <div id="message"></div>

    <div class="container">
        <div class="left">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <?php if (isset($imagesToShow[$i])): ?>
                    <div class="image-box">
                        <img src="images/<?php echo htmlspecialchars($imagesToShow[$i]); ?>" alt="Image" />
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>

        <div class="right">
            <?php for ($i = 3; $i < 6; $i++): ?>
                <?php if (isset($imagesToShow[$i])): ?>
                    <div class="image-box">
                        <img src="images/<?php echo htmlspecialchars($imagesToShow[$i]); ?>" alt="Image" />
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>

    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>"><button>« Previous</button></a>
        <?php endif; ?>
        <?php if ($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?>"><button>Next »</button></a>
        <?php endif; ?>
    </div>

    <script src="script.js"></script>
</body>
</html>
