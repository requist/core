/*
 * Copyright (c) 2014 Vincent Petry <pvince81@owncloud.com>
 *
 * This file is licensed under the Affero General Public License version 3
 * or later.
 *
 * See the COPYING-README file.
 *
 */

OCA.Sharing = {};
OCA.Sharing.App = {

	_inFileList: null,
	_outFileList: null,

	initSharingIn: function($el) {
		if (this._inFileList) {
			return;
		}

		this._inFileList = new OCA.Sharing.FileList(
			$el,
			{
				scrollContainer: $('#app-content'),
				sharedWithUser: true
			}
		);

		this._initFileActions(this._inFileList);
		this._extendFileList(this._inFileList);
		this._inFileList.appName = t('files_sharing', 'Shared with you');
		this._inFileList.$el.find('#emptycontent').text(t('files_sharing', 'No files have been shared with you yet.'));
	},

	initSharingOut: function($el) {
		if (this._outFileList) {
			return;
		}
		this._outFileList = new OCA.Sharing.FileList(
			$el,
			{
				scrollContainer: $('#app-content'),
				sharedWithUser: false
			}
		);

		this._initFileActions(this._outFileList);
		this._extendFileList(this._outFileList);
		this._outFileList.appName = t('files_sharing', 'Shared with others');
		this._outFileList.$el.find('#emptycontent').text(t('files_sharing', 'You haven\'t shared any files yet.'));
	},

	_initFileActions: function(fileList) {
		var fileActions = OCA.Files.FileActions.clone();
		// when the user clicks on a folder, redirect to the corresponding
		// folder in the files app
		fileActions.register('dir', 'Open', OC.PERMISSION_READ, '', function (filename, context) {
			OCA.Files.App.setActiveView('files', {silent: true});
			OCA.Files.App.fileList.changeDirectory(context.$file.attr('data-path') + '/' + filename, true, true);
		});
		fileList.setFileActions(fileActions);
	},

	_extendFileList: function(fileList) {
		// remove size column from summary
		fileList.fileSummary.$el.find('.filesize').remove();
	},

	/**
	 * Replace the window.FileList and window.FileActions globals to make
	 * legacy apps work properly.
	 */
	replaceGlobalsHack: function(fileList) {
		window.FileList = fileList;
		window.FileActions = fileList.fileActions;
	}
};

$(document).ready(function() {
	$('#app-content-sharingin').one('show', function(e) {
		OCA.Sharing.App.initSharingIn($(e.target));

		OCA.Sharing.App.replaceGlobalsHack(OCA.Sharing.App._inFileList);
	});
	$('#app-content-sharingout').one('show', function(e) {
		OCA.Sharing.App.initSharingOut($(e.target));

		OCA.Sharing.App.replaceGlobalsHack(OCA.Sharing.App._outFileList);
	});
});

