 








                                    <div class="col-lg-6">

<div class="st-form-field st-style1">
  <label>الخدمة</label>
 

  <select name="udepartment" id="udepartment" class="st_select1"
      data-placeholder=" اختر الخدمة">
      <option></option>

      
<?php
      foreach ($items as $key => $value) {

echo "<option value='$value'>$value</option>";

}
?>



    </select>
</div>


</div>
