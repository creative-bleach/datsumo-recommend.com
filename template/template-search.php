<!-- SEARCH AT SEARCH PAGE -->

<!-- ad_code -->
<?php include locate_template('ad_code.php'); ?>

<?php
$url = $_SERVER['REQUEST_URI'];
if (substr($url, -1) == '?') :
	$area = implode(',', $_GET['area']);
	$location = implode(',', $_GET['location']);
	$limit = implode(',', $_GET['limit']);
	$student_discount = implode(',', $_GET['student_discount']);
	$cancel = implode(',', $_GET['cancel']);
endif;
?>

<section id="search" class="area">
	<div class="inner">
		<div class="box">
			<div class="aco_box_mv">
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
										<?php if ($taxonomy->slug == $area) : ?>
											<option value="<?php echo $taxonomy->slug; ?>" selected><?php echo $taxonomy->name; ?></option>
										<?php else : ?>
											<option value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></option>
										<?php endif; ?>
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
										<?php if ($taxonomy->slug == $limit) : ?>
											<option value="<?php echo $taxonomy->slug; ?>" selected><?php echo $taxonomy->name; ?></option>
										<?php else : ?>
											<option value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></option>
										<?php endif; ?>
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
										<?php if ($taxonomy->slug == $location) : ?>
											<option value="<?php echo $taxonomy->slug; ?>" selected><?php echo $taxonomy->name; ?></option>
										<?php else : ?>
											<option value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></option>
										<?php endif; ?>
									<?php
									endforeach;
									?>
								<?php endif; ?>
							</select>
						</li>
						<li>
							<select name="orderby">
								<?php
								$url1 = $_SERVER['REQUEST_URI'];
								if (strstr($url, 'sort_recommended') == true) :
								?>
									<option value="off">並び順</option>
									<option value="sort_recommended" selected>おすすめ順</option>
									<option value="sort_word-of-mouth">クチコミ順</option>
								<?php elseif (strstr($url1, 'sort_word-of-mouth') == true) : ?>
									<option value="off">並び順</option>
									<option value="sort_recommended">おすすめ順</option>
									<option value="sort_word-of-mouth" selected>クチコミ順</option>
								<?php else : ?>
									<option value="off" selected>並び順</option>
									<option value="sort_recommended">おすすめ順</option>
									<option value="sort_word-of-mouth">クチコミ順</option>
								<?php endif; ?>
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
										<?php if ($taxonomy->slug == $commitment) : ?>
											<option value="<?php echo $taxonomy->slug; ?>" selected><?php echo $taxonomy->name; ?></option>
										<?php else : ?>
											<option value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></option>
										<?php endif; ?>
									<?php
									endforeach;
									?>
								<?php endif; ?>
							</select>
						</li>
						<li class="column_sp sp">
							<label>
								<?php if ($student_discount == "discount_yes") : ?>
									<input name="student_discount" type="checkbox" class="check_i" value="discount_yes" checked>
								<?php else : ?>
									<input name="student_discount" type="checkbox" class="check_i" value="discount_yes">
								<?php endif; ?>
								<span>学割</span>
							</label>
							<label>
								<?php if ($cancel == "cancel_yes") : ?>
									<input name="cancel" type="checkbox" class="check_i" value="cancel_yes" checked>
								<?php else : ?>
									<input name="cancel" type="checkbox" class="check_i" value="cancel_yes">
								<?php endif; ?>
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