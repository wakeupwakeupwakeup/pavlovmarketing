<div class="company-info">
  <div class="width-container head">
    <div class="company-info__left">
      <div class="site-tagline top-tagline">Надежный поставщик</div>
      <div class="site-tagline bottom-tagline">Высококачественных резинотехнических изделий</div>
    </div>
    <div class="company-info__left{if $site.logo_left} logo_left{/if}">
        {if $site.site_logo.filename}
          <div class="site-logo"{if !$site.name && !$site.desc} style="margin: 0;"{/if}>
              {assign var=logo_width value=$site.logo_width}
              {assign var=logo_height value=$site.logo_height}
              {if ($mode=='main' && $page.main) || ($page.main && $page.plugin_id != '16')}
                <span>
										<img style="max-width: {$logo_width|default:'90'}px;" src="{s3_img width=$logo_width|default:'90' height=$logo_height|default:'90' method=c src=$site.site_logo.filename}" alt="{$site.site_title}" />
									</span>
              {else}
                <a href="{$smarty.server.PROTOCOL}://{$smarty.server.HTTP_HOST}">
                  <img style="max-width: {$logo_width|default:'90'}px;" src="{s3_img width=$logo_width|default:'90' height=$logo_height|default:'90' method=c src=$site.site_logo.filename}" alt="{$site.site_title}" />
                </a>
              {/if}
          </div>
        {/if}
        {if $site.name || $site.desc}
          <div class="site-name">
              {if $site.name}
                <div class="site-name site-name-wizzad">
                    {if !($shop2_main_blocks && $shop2_main_blocks.type == 0)}<a href="{$smarty.server.PROTOCOL}://{$smarty.server.HTTP_HOST}" class="site-name-link">{else}<span class="site-name-link">{/if}{$site.name|htmlspecialchars_decode}{if !($shop2_main_blocks && $shop2_main_blocks.type == 0)}</a>{else}</span>{/if}
                </div>
              {/if}
              {if $site.desc}
                <div class="desc site-desc">{$site.desc|htmlspecialchars_decode}</div>
              {/if}
          </div>
        {/if}
    </div>
    <div class="company-info__right">
        {if !empty($site.phones)}
          <div class="contacts">
            <div class="contacts-inner">
              <div class="phone-item">
                  {foreach from=$site.phones item=e key=phones_key}
                      {if $phones_key<2}
                          {if $e.note}<div class="footer__counters" style="text-align: left; margin-bottom: 2px;">{$e.note}</div>{/if}
                        <a href="tel:{$e.title|strip_tags|regex_replace:"/[^\+\d]/":""}" onclick="javascript:gtag_report_conversion()" class="phone{if $site.phones|@count>2} active{/if}">{$e.title}</a>
                      {/if}
                  {/foreach}
                  {if $site.phones|@count>2}
                    <div class="contacts__phones-all">
                      <span class="contacts__phones-close">&nbsp;</span>
                        {foreach from=$site.phones item=e name=phones_block}
                            {if $e.note}<div class="footer__counters" style="text-align: left; margin-bottom: 2px;">{$e.note}</div>{/if}
                          <div{if !$smarty.foreach.phones_block.last} style="margin-bottom: 4px;"{/if}>
                            <a href="tel:{$e.title|strip_tags|regex_replace:"/[^\+\d]/":""}">{$e.title}</a>
                          </div>
                        {/foreach}
                    </div>
                  {/if}
              </div>
                {if $site.time_block}
                  <div class="schedule" style="margin-top: 6px;">{$site.time_block}</div>
                {/if}
            </div>
          </div>
        {/if}
        {if $site.address}
          <div class="address">{$site.address}</div>
        {/if}
    </div>
  </div>
</div>
