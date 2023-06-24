
<?php use Illuminate\Support\Arr;

?>
@if($artikel->lastpage() > 1)
<nav aria-label="Page navigation example" class="mx-9">
  <ul class="inline-flex items-center -space-x-px">
    <li>
      <a href="{{ $artikel->links()->getData()['elements'][0][1] }}" class="rounded-l-lg p-2 bg-white border border-gray-300" >
                First
      </a>
    </li>
    <li>
            @if ($artikel->links()->getData()['paginator']->currentPage() > 2 )
                <a href="artikel?page={{ $artikel->links()->getData()['paginator']->currentPage() - 2 }}" class="rounded-sm p-2 bg-white border border-gray-300"><i class="fa-solid fa-angles-left" style="color: #813d9c;"></i> </a>
            @endif

            @if ($artikel->links()->getData()['paginator']->currentPage() != 1 )
                <a href="artikel?page={{ $artikel->links()->getData()['paginator']->currentPage() - 1 }}" class="rounded-sm p-2 bg-white border border-gray-300"> <i class="fa-solid fa-angle-left" style="color: #813d9c;"></i> </a>
            @endif
        </li>
        <div class="p-3">
            {{ $artikel->links()->getData()['paginator']->currentPage() }}
        </div>
        <li>
            @if ($artikel->links()->getData()['paginator']->currentPage() != count($artikel->links()->getData()['elements'][0]) )
                <a href="artikel?page={{ $artikel->links()->getData()['paginator']->currentPage() + 1 }}" class="rounded-sm p-2 bg-white border border-gray-300"><i class="fa-solid fa-angle-right" style="color: #813d9c;"></i> </a>
            @endif

            @if ($artikel->links()->getData()['paginator']->currentPage() <  count($artikel->links()->getData()['elements'][0])-1)
                <a href="artikel?page={{ $artikel->links()->getData()['paginator']->currentPage() + 2 }}" class="rounded-sm p-2 bg-white border border-gray-300"><i class="fa-solid fa-angles-right" style="color: #813d9c;"></i> </a>
            @endif
    </li>
    <li>
<a href="<?= Arr::last($artikel->links()->getData()['elements'][0]) ?>" class="rounded-r-lg p-2 bg-white border border-gray-300 ">
            Last
      </a>
    </li>
  </ul>
</nav>
@endif
