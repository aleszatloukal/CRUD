{{-- select_from_array column --}}
@php
    $values = data_get($entry, $column['name']);
@endphp

<span>
	<?php
		if ($values !== null) {
			if (is_array($values)) {
				$array_of_values = [];

				foreach ($values as $key => $value) {
					$array_of_values[] = $column['options'][$value];
				}

				if (count($array_of_values) > 1) {
					echo implode(', ', $array_of_values);
				} else {
					echo $array_of_values;
				}
			} else {
				echo $column['options'][$values];
			}
	    } else {
	    	echo "-";
	    }
	?>
</span>