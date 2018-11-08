<?php
/**
 * Template for displaying course teachers/ instructor
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 */

$teachers = tutor_utils()->get_teachers_by_course();
if ($teachers){
	?>
	<h3><?php _e('About the teachers', 'tutor'); ?></h3>

	<div class="tutor-course-teachers-wrap">
		<?php
		foreach ($teachers as $teacher){
			?>



			<div class="single-teacher-wrap">

				<div class="single-teacher-top">
					<div class="teacher-avatar">
						<?php
						echo tutor_utils()->get_tutor_avatar($teacher->ID);
						?>
					</div>

					<div class="teacher-name">
						<h3><?php echo $teacher->display_name; ?></h3>
						<h4><?php echo $teacher->tutor_profile_job_title; ?></h4>
					</div>

					<div class="teacher-bio">
						<?php echo $teacher->tutor_profile_bio ?>
					</div>
				</div>


				<div class="single-teacher-bottom">

					<div class="ratings">

						<span class="rating-generated">
							<?php tutor_utils()->star_rating_generator(3.50); ?>
						</span>

						<?php


						echo " <span class='rating-digits'>3.50</span> ";
						echo " <span class='rating-total-meta'>(172 ratings)</span> ";

						?>
					</div>

					<div class="courses">
						<p>
							<i class='icon-graduation-cap-1'></i>
							<?php echo tutor_utils()->get_course_count_by_teacher($teacher->ID); ?> <span class="tutor-text-mute"> <?php _e('Courses', 'tutor'); ?></span>
						</p>

					</div>

					<div class="students">

						<?php
						$total_students = tutor_utils()->get_total_students_by_teacher($teacher->ID);


						?>

						<p>
							<i class='icon-users-outline'></i>
							<?php echo  $total_students; ?>
							<span class="tutor-text-mute">  <?php _e('students', 'tutor'); ?></span>
						</p>

					</div>

				</div>

			</div>


			<?php
		}
		?>
	</div>
	<?php
}