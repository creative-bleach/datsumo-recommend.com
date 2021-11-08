<!-- SEARCHFORM -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<section id="search" class="area">
	<div class="inner">
		<div class="box">
			<div class="aco_box_mv search_tgl">
				<form action="<?php echo home_url(); ?>/" id="search-form" method="get">
					<input name="s" type="hidden" />
					<input type="hidden" name="post_type" value="post">
					<ul>
						<li>
							<select name="area">
								<option value="" selected>エリア</option>
								<?php
								$taxonomy_name = 'area';
								$args = array('hide_empty' => 0);
								$taxonomys = get_terms($taxonomy_name, $args);
								if (!empty($taxonomys) && !is_wp_error($taxonomys)) :
									foreach ($taxonomys as $taxonomy) :
								?>
										<!-- loop here -->
										<option value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></option>
									<?php
									endforeach;
									?>
								<?php endif; ?>
							</select>
						</li>
						<li>
							<select name="limit">
								<option value="" selected>期間</option>
								<?php
								$taxonomy_name = 'limit';
								$args = array('hide_empty' => 0);
								$taxonomys = get_terms($taxonomy_name, $args);
								if (!empty($taxonomys) && !is_wp_error($taxonomys)) :
									foreach ($taxonomys as $taxonomy) :
								?>
										<!-- loop here -->
										<option value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></option>
									<?php
									endforeach;
									?>
								<?php endif; ?>
							</select>
						</li>
						<li>
							<select name="location">
								<option value="" selected>部位</option>
								<?php
								$taxonomy_name = 'location';
								$args = array('hide_empty' => 0);
								$taxonomys = get_terms($taxonomy_name, $args);
								if (!empty($taxonomys) && !is_wp_error($taxonomys)) :
									foreach ($taxonomys as $taxonomy) :
								?>
										<!-- loop here -->
										<option value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></option>
									<?php
									endforeach;
									?>
								<?php endif; ?>
							</select>
						</li>
						<li>
							<select name="orderby">
								<option value="off" selected>並び順</option>
								<option value="sort_recommended">おすすめ順</option>
								<option value="sort_word-of-mouth">クチコミ順</option>
							</select>
						</li>
						<li class="pc">
							<select name="commitment">
								<option value="" selected>こだわり</option>
								<?php
								$taxonomy_name = 'commitment';
								$args = array('hide_empty' => 0);
								$taxonomys = get_terms($taxonomy_name, $args);
								if (!empty($taxonomys) && !is_wp_error($taxonomys)) :
									foreach ($taxonomys as $taxonomy) :
								?>
										<!-- loop here -->
										<option value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></option>
									<?php
									endforeach;
									?>
								<?php endif; ?>
							</select>
						</li>
						<li class="column_sp sp">
							<label>
								<input name="student_discount" type="checkbox" class="check_i" value="discount_yes">
								<span>学割</span>
							</label>
							<label>
								<input name="cancel" type="checkbox" class="check_i" value="cancel_yes">
								<span>当日キャンセル可</span>
							</label>
						</li>
					</ul>
					<!-- order by recommend -->
					<input name="search" value="on" type="hidden" />
					<?php
					if (isset($_GET)) {
						$flg = 0;
						foreach ($_GET as $key => $value) {
							if ($key == 'code') {
								$flg = 1;
							}
							if ($flg === 1) {
								echo "<input name='" . $key . "' value='" . $value . "' type='hidden' />";
							}
						}
					}
					?>
					<input type="submit" value="検索" class="btn_search white">
				</form>
			</div>
		</div>
	</div>
</section>
<!-- search end -->