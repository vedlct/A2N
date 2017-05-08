<select class="form-control" name="menu_name" id="menu_name">
    <option selected  >Select Menu</option>
    <!--            --><?php
    foreach ($menu as $m)
    {
        echo "<option  value='" . $m->menuId . "'>" . $m->menuName . "</option>";
    }
    //
    //            foreach ($this->data['menutype'] as $e)
    //            {
    //                echo "<option value='" . $e->type . "'>" . $e->type . "</option>";
    //            }
    //
    //            ?>

</select>