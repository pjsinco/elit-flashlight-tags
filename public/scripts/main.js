jQuery(document).ready(function() {

  function addFloodlightTags(evt) {
    floodlightFindADO();
    floodlightUniqueFindADO();
  }

  function getAxel() {
    var axel = Math.random() + "";
    return axel * 10000000000000;
  }

  function createTag(tagUrl) {

    var tag = document.createElement('iframe');

    tag.setAttribute('src', tagUrl);
    tag.setAttribute('width', '1');
    tag.setAttribute('height', '1');
    tag.setAttribute('frameborder', '0');
    tag.setAttribute('style', 'display: none');

    return tag;
  }

  function floodlightUniqueFindADO() {
    var a = getAxel();
    var tagUrl  = 'https://5128400.fls.doubleclick.net/activityi;src=5128400;';
        tagUrl += 'type=kpirm0;cat=uniqu0;dc_lat=;dc_rdid=;';
        tagUrl += 'tag_for_child_directed_treatment=;ord=1;num=' + a;

    var tag = createTag(tagUrl);

    document.body.appendChild(tag);
  }

  function floodlightFindADO() {
    var a = getAxel();

    var tagUrl  = 'https://5128400.fls.doubleclick.net/activityi;src=5128400;';
        tagUrl += 'type=kpirm0;cat=finda0;ord=' + a + '?';

    var tag = createTag(tagUrl);

    document.body.appendChild(tag);
  }

  var goButton = document.getElementById("fydGo");
  goButton.addEventListener("click", addFloodlightTags);
});
