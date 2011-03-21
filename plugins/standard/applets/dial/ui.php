<?php
	$version = AppletInstance::getValue('version', null);
	$dial_whom_selector = AppletInstance::getValue('dial-whom-selector', 'user-or-group');
	$no_answer_action = AppletInstance::getValue('no-answer-action', 'voicemail');

?>
<div class="vbx-applet dial-applet">

	<h2>Dial Whom</h2>
	<div class="radio-table">
		<table>
			<tr class="radio-table-row first on">
				<td class="radio-cell">
				
				</td>
				<td class="content-cell">
					<h4>Dial phone number</h4>
						<div class="vbx-input-container input">
							<input type="text" class="medium" name="dial-whom-number" value="<?php echo AppletInstance::getValue('dial-whom-number') ?>"/>
							<input type="hidden" name="dial_whom_selector" value="number">
						</div>
				</td>
			</tr>
		</table>
	</div>

	<br />
	<h2>If nobody answers...</h2>
	<div class="radio-table no-answer nobody-answers-user-group <?php echo ($dial_whom_selector === 'user-or-group')? '' : 'hide' ?>">
		<table>
			<tr class="radio-table-row first on">
				<td class="radio-cell">
					
				</td>
				<td class="content-cell" style="vertical-align: middle;">
					<table><tr style="border-bottom-width: 0px;">
						<td align="left" style="vertical-align: middle;"><h4>Go to</h4></td>
						<td align="right">
							<?php echo AppletUI::DropZone('no-answer-redirect') ?>
						</td>
					</tr></table>
				</td>
			</tr>
		</table>
	</div>
	<div class="vbx-full-pane nobody-answers-number <?php echo ($dial_whom_selector === 'number')? '' : 'hide' ?>">
		<?php echo AppletUI::DropZone('no-answer-redirect-number') ?>
	</div>
												
	<!-- Set the version of this applet -->
	<input type="hidden" name="version" value="3" />
</div><!-- .vbx-applet -->
