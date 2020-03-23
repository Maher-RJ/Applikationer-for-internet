<!DOCTYPE html>
<html>
<head lang="sv">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Kalender</title>

    <style>
                body  {
                    background-image: url("food.jpg");
                    background-color: #cccccc;
                }
        </style>
    </head>
<body>
    <h1>Mat kalender</h1>
    <?php require_once("menu.php"); ?>
    <table>
      <tr>
        <th><span>Mån</span></th>
        <th><span>Tis</span></th>
        <th><span>Ons</span></th>
        <th><span>Tors</span></th>
        <th><span>Fre</span></th>
        <th><span>Lör</span></th>
        <th><span>Sön</span></th>
      </tr>
      <tr>
        <td><span>1</span></td>
        <td><span>2</span></td>
        <td><span>3</span></td>
        <td><span>4</span></td>
        <td><span>5</span></td>
        <td><span>6</span></td>
        <td><span>7</span></td>
      </tr>
      <tr>
        <td><span>8</span></td>
        <td><span>9</span></td>
        <td><span>10</span><a href="meatballs.php"><img class="spanbild" src="img/meat.jpg" alt="bild"></a></td>
        <td><span>11</span></td>
        <td><span>12</span></td>
        <td><span>13</span></td>
        <td><span>14</span></td>
      </tr>
      <tr>
        <td><span>15</span></td>
        <td><span>16</span></td>
        <td><span>17</span></td>
        <td><span>18</span></td>
        <td><span>19</span></td>
        <td><span>20</span><a href="pannkakor.php"><img class="spanbild" src="img/pancake.jpg" alt="bild"></a></td>
        <td><span>21</span></td>
      </tr>
      <tr>
        <td><span>22</span></td>
        <td><span>23</span></td>
        <td><span>24</span></td>
        <td><span>25</span></td>
        <td><span>26</span></td>
        <td><span>27</span></td>
        <td><span>28</span></td>
      </tr>
      <tr>
        <td><span>29</span></td>
        <td><span>30</span></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>

</body>
</html>