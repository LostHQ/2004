                    </div>               
                    <img src="img/blank.gif" height="7" width="1">
                  </td>
                  <td width="7"></td>
                </tr>
              </tbody>
            </table>
            <table cellpadding="0" cellspacing="0"><tbody><tr><td colspan="3"><img src="img/fm_bottom.gif"></td></tr></tbody></table>
            <br>
          </td>
        </tr>
      </tbody>
    </table>
    <table cellpadding="0" cellspacing="0" background="img/background2.jpg">
      <tbody>
        <tr>
          <td><img src="img/edge_g2.jpg" width="100" height="82" hspace="0" vspace="0"></td>
          <td>
            <div style="text-align:center;font-family:Arial,Helvetica,sans-serif; font-size:12px;height:40px;">
              <div id="site-options-container" data-style="<?= $siteOptStyle ?>" data-usuk="<?= $siteOptRegion ?>" data-gamever="<?= $siteOptGameVer ?>">
                <div style="height:7px;"></div>
                <button class="site-footer" onclick="location.href='?p=changelog'" type="button">Credits and Changelog</button>
                -
                <button class="site-footer" id="site-options-toggle">Site Options</button>
                <div id="site-options-backdrop" hidden></div>
                <div id="site-options-modal" hidden>
                  <div id="site-options-content">
                    <h2>LostHQ Website Options</h2>
                    <label>Menu Styles:<br>
                      <select id="style-select">
                        <option value="default">Modern (RS Look)</option>
                        <option value="oldschool">Oldschool (RuneHQ Look)</option>
                      </select>
                    </label>
                    <br><br>
                    <label>Floor Labels:<br>
                      <select id="usuk-select">
                        <option value="US">United States (1st Floor, 2nd Floor, etc)</option>
                        <option value="UK">United Kingdom (Ground Floor, 1st Floor, etc)</option>
                      </select>
                    </label>
                    <br><br>
                    <label>Game Version:<br>
                      <select id="gamever-select">
                        <option value="2004">2004 (rev. 245 latest)</option>
                        <option disabled>2005 (tbd)</option>
                        <option disabled>2006 (tbd)</option>
                        <option disabled>2007 (tbd)</option>
                        <option disabled>2008 (tbd)</option>
                        <option disabled>2009 (tbd)</option>
                      </select>
                    </label>
                    <br><br>
                    <button id="site-options-close">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <img src="img/edge_c.jpg" width="400" height="42" hspace="0" vspace="0">
          </td>
          <td><img src="img/edge_h2.jpg" width="100" height="82" hspace="0" vspace="0"></td>
        </tr>
      </tbody>
    </table>
  </div>
</td>
</tr></tbody></table>
<div id="scrollToTop" style="display:none; cursor:pointer;">
  <img src="img/scroll_icon.png" width="19" height="67" alt="Scroll to top">
  <div style="font-size:12px; color:white;">Scroll to Top</div>
</div>
<div class="img-modal" id="imgModal">
  <span class="close-btn" id="closeModal">&times;</span>
  <img src="" alt="Preview" id="modalImage">
</div>
<?php echo getJavaScriptVersion('js/end.js'); ?>
</body>
</html>