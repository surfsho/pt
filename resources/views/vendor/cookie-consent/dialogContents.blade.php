
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">We use cookies to provide you with the most optimal experience on our website.</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- <p>{!! trans('cookie-consent::texts.message') !!} -->
      <p>
      Websites may save data on your browser through cookies, which are used to customize your browsing experience based on your preferences and device information. You can decline certain types of cookies, but disabling them may impact your ability to use the site fully. Check our updated Cookie Policy for more information.
      </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary js-cookie-consent-agree" data-bs-dismiss="modal">{{ trans('cookie-consent::texts.agree') }}</button>
      </div>
    </div>
  </div>
</div>

