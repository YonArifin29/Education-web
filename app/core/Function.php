<?php
    class Fungsi {
        public function createTableRow($col1, $col2, $col3) {
            return "
                <tr>
                    <td>$col1<td>
                    <td>$col2<td>
                    <td>$col3<td>
                <tr>
            ";
        }
    }
