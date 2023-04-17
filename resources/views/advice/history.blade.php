{{-- Modal for Read --}}
<div class="modal fade" id="historyModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="historyModalLabel">Advice History</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <ul class="list-group">
               @foreach ($history as $item)
                  <li class="list-group-item">
                     <strong>{{ $item->name }}</strong> - {{ $item->advice }}
                     ({{ $item->created_at->format('M d, Y h:ia') }})              
                  </li>
               @endforeach
            </ul>
         </div>
      </div>
   </div>
</div>

{{-- <script>
   $(document).ready(function() {
      // Event listener for update button
      $('#update-advice-btn').click(function() {
         $.ajax({
            url: '{{ route('saran.update', $advice->id) }}',
            type: 'PUT',
            data: $('#updateAdviceForm').serialize(),
            success: function(response) {
               // Update the advice list with the new data
               // For example:
               $('#adviceList').html(response.adviceList);

               // Hide the update modal
               $('#updateModal').modal('hide');
            },
            error: function() {
               alert('An error occurred while updating the advice.');
            }
         });
      });
   });
</script> --}}
