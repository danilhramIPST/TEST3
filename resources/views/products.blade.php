<?php
?>

<br>


<br>
<table border="3">
    <caption> Staff only! </caption>
    <tr><th> Name of product </th><th> Sell by </th><th> Expired? </th></tr>
    @foreach($products as $item)
        <tr>

            <td>{{ $item['price'] }}</td>
            <td>{{ $item['date'] }}</td>
            <td>
                @if(strtotime($item['date']) > strtotime(date('d.m.Y')))
                    0
                @else
                    1
                @endif
            </td>

        </tr>
    @endforeach
</table>
