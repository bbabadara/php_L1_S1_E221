
<form action="<?= $url?>" method="post">
    <div class="formc flex">
    <div class="col-10">
    <div class="flex afor ndta">
        <div class="flex">
            <label for="">Zone</label>
            <input type="text" name="zone">
        </div>
        <div class="flex">
            <label for="">client</label>
            <input type="text" name="client">
        </div>
    </div>
    <div class="bfor flex ndta">
        <div class="flex">
            <label for="">Date</label>
            <input type="date" name="date">
        </div>

        <div class="">
  

            <div>
            <input type="radio" id="res" name="dispo" value="0" >
            <label for="">Reserver</label>
          </div>

            <div>
            <input type="radio" id="dispo" name="dispo" value="1" >
            <label for="">Disponible</label>
            </div>

        </div>

    </div>

<button type="submit" name="ok"> OK </button>
</div>
</div>
</form>