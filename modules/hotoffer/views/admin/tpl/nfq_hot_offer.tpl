[{include file="headitem.tpl" title="GENERAL_ADMIN_TITLE"|oxmultilangassign}]

<script type="text/javascript">
    <!--
    function editThis( sID )
    {
        var oTransfer = top.basefrm.edit.document.getElementById( "transfer" );
        oTransfer.oxid.value = sID;
        oTransfer.cl.value = top.basefrm.list.sDefClass;

        //forcing edit frame to reload after submit
        top.forceReloadingEditFrame();

        var oSearch = top.basefrm.list.document.getElementById( "search" );
        oSearch.oxid.value = sID;
        oSearch.actedit.value = 0;
        oSearch.submit();
    }
    //-->
</script>

[{ if $readonly}]
[{assign var="readonly" value="readonly disabled"}]
[{else}]
[{assign var="readonly" value=""}]
[{/if}]

<form name="transfer" id="transfer" action="[{ $oViewConf->getSelfLink() }]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="oxid" value="[{ $oxid }]">
    <input type="hidden" name="cl" value="nfq_hot_offer">
    <input type="hidden" name="editlanguage" value="[{ $editlanguage }]">
</form>
<form name="myedit" id="myedit" action="[{ $oViewConf->getSelfLink() }]" method="post">
    [{$oViewConf->getHiddenSid()}]
    <input type="hidden" name="cl" value="nfq_hot_offer">
    <input type="hidden" name="fnc" value="">
    <input type="hidden" name="oxid" value="[{ $oxid }]">
    <input type="hidden" name="voxid" value="[{ $oxid }]">
    <input type="hidden" name="oxparentid" value="[{ $oxparentid }]">
    <input type="hidden" name="editval[oxarticles__oxid]" value="[{ $oxid }]">
    <table cellspacing="0" cellpadding="0" border="0" width="98%">
        <tr>
            <td class="edittext" width="120">
                [{ oxmultilang ident="GENERAL_HOT_OFFER" }]
            </td>
            <td class="edittext">
                <input type="hidden" name="editval[oxarticles__nfqhotoffer]" value="0">
                <input class="edittext" type="checkbox" name="editval[oxarticles__nfqhotoffer]" value="1" [{if $edit->oxarticles__nfqhotoffer->value == 1}]checked="checked"[{/if}] [{ $readonly }]>

            </td>
        </tr>

        <tr>
            <td class="edittext" colspan="2">
                <input type="submit" class="edittext" name="save" value="[{ oxmultilang ident="ARTICLE_PICTURES_SAVE" }]" onClick="Javascript:document.myedit.fnc.value='save'"><br>
            </td>
        </tr>
    </table>
</form>

[{include file="bottomnaviitem.tpl"}]
[{include file="bottomitem.tpl"}]