/*
 * Copyright (c) 2014
 *
 * This file is licensed under the Affero General Public License version 3
 * or later.
 *
 * See the COPYING-README file.
 *
 */

$(document).ready(function() {
	if (!_.isUndefined(OC.Share) && !_.isUndefined(OCA.Files)) {
		// TODO: make a separate class for this or a hook or jQuery event ?
		var oldCreateRow = OCA.Files.FileList.prototype._createRow;
		OCA.Files.FileList.prototype._createRow = function(fileData) {
			var tr = oldCreateRow.apply(this, arguments);
			if (fileData.shareOwner) {
				tr.attr('data-share-owner', fileData.shareOwner);
			}
			return tr;
		};

		// use delegate to catch the case with multiple file lists
		$('#content').delegate('#fileList', 'fileActionsReady',function(){
			var $fileList = $(this);
			var allShared = $fileList.find('[data-share-owner] [data-Action="Share"]');
			allShared.addClass('permanent');
			allShared.find('span').text(function(){
				var $owner = $(this).closest('tr').attr('data-share-owner');
				return ' ' + t('files_sharing', 'Shared by {owner}', {owner: $owner});
			});

			if (!OCA.Sharing.sharesLoaded){
				OC.Share.loadIcons('file', $fileList);
				// assume that we got all shares, so switching directories
				// will not invalidate that list
				OCA.Sharing.sharesLoaded = true;
			}
			else{
				OC.Share.updateIcons('file', $fileList);
			}
		});

		OCA.Files.fileActions.register(
				'all',
				'Share',
				OC.PERMISSION_READ,
				OC.imagePath('core', 'actions/share'),
				function(filename, context) {

			var $tr = context.$file;
			var itemType = 'file';
			if ($tr.data('type') === 'dir') {
				itemType = 'folder';
			}
			var possiblePermissions = $tr.data('permissions');
			var appendTo = $tr.find('td.filename');
			// Check if drop down is already visible for a different file
			if (OC.Share.droppedDown) {
				if ($tr.data('id') !== $('#dropdown').attr('data-item-source')) {
					OC.Share.hideDropDown(function () {
						$tr.addClass('mouseOver');
						OC.Share.showDropDown(itemType, $tr.data('id'), appendTo, true, possiblePermissions, filename);
					});
				} else {
					OC.Share.hideDropDown();
				}
			} else {
				$tr.addClass('mouseOver');
				OC.Share.showDropDown(itemType, $tr.data('id'), appendTo, true, possiblePermissions, filename);
			}
		});
	}
});
