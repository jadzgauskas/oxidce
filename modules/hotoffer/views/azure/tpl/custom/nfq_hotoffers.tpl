[{oxscript add="$('a.js-external').attr('target', '_blank');"}]
[{oxscript include="js/widgets/oxarticlebox.js" priority=10 }]
[{oxscript add="$( '#content' ).oxArticleBox();"}]

[{capture append="oxidBlock_content"}]
[{if $oView->getHotOfferList()|@count > 0}]
<h1 class="pageHead">[{ oxmultilang ident="PAGE_SHOP_START_HOTOFFERS"}]</h1>

<div class="listRefine clear bottomRound">
    [{include file="widget/locator/listlocator.tpl" locator=$oView->getPageNavigationLimitedTop() itemsPerPage=true sort=true }]
</div>

[{include file="widget/product/list.tpl" type=$oView->getListDisplayType() listId="productList" products=$oView->getHotOfferList()}]

[{include file="widget/locator/listlocator.tpl" locator=$oView->getPageNavigationLimitedBottom() place="bottom"}]

[{/if}]
[{insert name="oxid_tracker"}]
[{/capture}]
[{include file="layout/page.tpl" sidebar="Left"}]