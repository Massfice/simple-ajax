{if isset($infos) && is_array($infos)}

  {foreach $infos as $info}
    <li style = "color:yellow; background-color:{if $info->isError()}red{else}green{/if};">{$info->getMsg()}</li>
  {/foreach}

{/if}
