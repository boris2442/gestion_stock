<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media (max-width: 768px) {
            #sidebar {
                transform: translateX(-100%);
            }

            #sidebar.open {
                transform: translateX(0);
            }
        }
       
    </style>
</head>

<body class="flex">
    <button id="burger" class="md:hidden p-2 fixed z-50 bg-blue-700 text-white top-4 left-4 rounded">☰</button>
    <?php include 'sidebar.php'; ?>
    <main class="p-4 w-full transition-all duration-300 ml-64">