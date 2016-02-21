if(!empty($results)){
    echo "<table class='table'>";
    foreach($results as $result) {
        //print_r($result->query);
        //print_r($result->status);
        //print_r($result->origin_details);
        //print_r($result->results);
        foreach ($result->results[0]->costs as $costs) {
            echo '<tr><th>service</th><th>:</th><th>' . $costs->service . '</th></tr>';
            echo '<tr><td>description</td><td>:</td><td>' . $costs->description . '</td></tr>';
            echo '<tr><td>cost</td><td>:</td><td>' . $costs->cost[0]->value . '</td></tr>';
            echo '<tr><td>etd</td><td>:</td><td>' . $costs->cost[0]->etd. '</td></tr>';
        }
    }
}
