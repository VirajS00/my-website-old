<?php
    header('Content-Type: application/json');
    include('connect.php');
    $q;
    $resourceObj = [];
    if(isset($_GET['category'])) {
        $q = "SELECT name, type, short_desc, links FROM resources WHERE category = '".$_GET['category']."' ORDER BY sort";
    } else {
        $q = "SELECT name, type, short_desc, links FROM resources ORDER BY sort";
    }

    $r = mysqli_query($conn, $q);

    if($r) {
        $resources = [];
        $status = ['status' => 'Success'];
        while($row = mysqli_fetch_array($r)) {
            $links = json_decode($row['links'], true);

            $links_array = [];
            foreach($links as $link) {
                array_push($links_array, [
                    'name' => $link['link_type'],
                    'url' => $link['url']
                ]);
            }

            array_push($resources, [
                "resource_name" => $row['name'],
                "resource_type" => $row['type'],
                "short_desc" => $row['short_desc'],
                "links" => $links_array
            ]);
        }

        array_push($resourceObj, $status);
        array_push($resourceObj, ['resources' => $resources]);
    } else {
        $status = ['status' => 'Database Error'];
        array_push($resourceObj, $status);
        array_push($resourceObj, ["MySQL Error" => mysqli_error($conn)]);
    }
    
    echo json_encode($resourceObj);
?>