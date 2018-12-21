<div style="padding:5px">
	<div>
		<form id="insertData" action="home.php?url=save_data.php" method="post" >
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td valign="top" class="text-right">
						<label for="income">เลือก : &nbsp;</label>
					</td>
					<td>
						<div class="">
							<label class="radio">
								<input type="radio" name="data[income]" value="income" checked/>รายรับ
							</label>
							<label class="radio">
								<input type="radio" name="data[income]" value="pay" />รายจ่าย
							</label>
						</div>
					</td>
				</tr>
				<tr>
					<td valign="top" class="text-right">
						<label for="description">รายการที่ใช้ : &nbsp;</label>
					</td>
					<td>
						<input type="text" name="data[description]" 
						placeholder="รายละเอียดที่ใช้จ่าย?"  
						style="width: 250px" 
						data-validation="required"
						/>
					</td>
				</tr>
				<tr>
					<td valign="top" class="text-right">
						<label for="qty">จำนวน : &nbsp;</label>
					</td>
					<td>
						<input type="text" name="data[qty]"
						placeholder="จำนวน.."
						style="width: 120px"
						data-validation="number"
						maxlength="8"/>
					</td>
				</tr>
				<tr>
					<td>

					</td>
					<td>
						<button type="submit" class="btn btn-success"><i class="icon-ok-sign"></i> บันทึก</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>