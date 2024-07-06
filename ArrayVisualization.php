<?php

function viewArrayStructure(array $array, $depth = 1) {
    static $structure = '';  // Collects the full output as a string

    // Base indentation settings
    $baseIndent = 4;  // Number of periods for each level of depth

    foreach ($array as $key => $value) {
        // Calculate indent based on current depth
        $indent = str_repeat(".", $baseIndent * ($depth - 1));

        // Prepare the prefix for keys, adding depth indicator only for array values
        $prefix = (is_array($value) ? "{$depth} ▶️ $key" : $key);

        $structure .= $indent . $prefix . "\n";
        if (is_array($value)) {
            // Check if the array is associative or indexed
            $isAssoc = count(array_filter(array_keys($value), 'is_string')) > 0;
            if ($isAssoc) {
                // If associative, process normally
                visualizeArrayStructure($value, $depth + 1);
            } else {
                // If indexed, process only the first item
                $firstItem = reset($value);
                if (is_array($firstItem)) {
                    visualizeArrayStructure($firstItem, $depth + 1);
                }
                if (count($value) > 1) {
                    $structure .= $indent . str_repeat(" ", $baseIndent) . "(" . count($value) . " results)\n";
                }
            }
        }
    }

    if ($depth == 1) {
        echo $structure;
        $structure = ''; // Reset structure after printing to avoid duplicate content on subsequent calls
    }
}

