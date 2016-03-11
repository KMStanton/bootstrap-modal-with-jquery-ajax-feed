//modal link used for every modal, but modal power only used once per modal section
function modal_link($text, $href, $data){
    echo"<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#modal'
onclick='swapContent(\"$href\", \"$data\", modalFeed)'>$text</button>";
}

function modal_power(){
    echo"
    <!-- Modal -->
  <div class='modal fade' id='modal' role='dialog'>
    <div class='modal-dialog'>

      <!-- Modal content-->
      <div class='modal-content' id='modalFeed'>
      <!--content area-->
              <div class='modal-header'>

          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Modal Header</h4>
        </div>
        <div class='modal-body'>
          <p>Some text in the modal.</p>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
      <!--content area-->
    </div>


      </div>

    </div>
  </div>
    ";
}
