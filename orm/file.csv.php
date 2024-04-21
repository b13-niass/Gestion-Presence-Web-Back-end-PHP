<?php 

function read_data_files($file_name,$keys = null){
    $chemin = "../data/$file_name.csv";
    $csvData = file_get_contents($chemin);
    $lines = explode(PHP_EOL, $csvData);
    $array = array();
    foreach ($lines as $line) {
        if(!empty($line)){
            $values = str_getcsv($line);
            $array[] = $keys == null ? $values : array_combine($keys, $values);
        }
    }
    return $array;
}

function write_data_files($file_name, $data){
    $chemin = "../data/$file_name.csv";

    $csvData = '';
    // dd($data);
    foreach ($data as $row) {
        // dd($row);
        $csvData .= implode(',', $row) . "\n";
    }
    $success = file_put_contents($chemin, $csvData);
    if ($success !== false) {
        return true;
    } else {
        return false;
    }
}
