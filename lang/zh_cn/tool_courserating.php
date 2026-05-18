<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Simplified Chinese language pack for tool_courserating.
 *
 * @package     tool_courserating
 * @category    string
 */

defined('MOODLE_INTERNAL') || die();

$string['addrating'] = '提交评分';
$string['allowreviews'] = '评分可附带评论';
$string['allowreviewsconfig'] = "- 不允许文字评论 - 用户只能提交星级评分。\n- 学生可提交评论但不能查看他人评论 - 只有具备 tool/courserating:reports 能力的用户可以查看评论。\n- 学生可提交并查看评论 - 所有用户都可以查看已发布评论。";
$string['allowreviewshidden'] = '学生可提交评论但不能查看他人评论';
$string['allowreviewsno'] = '不允许文字评论';
$string['allowreviewsvisible'] = '学生可提交并查看评论';
$string['barwithrating'] = '查看 {$a->rating} 星评分的评论（占全部评分的 {$a->percent}）';
$string['cannotrate'] = '你没有为本课程评分的权限';
$string['cannotview'] = '你没有查看本课程评分的权限';
$string['cfielddescription'] = '请勿编辑。每次有人为该课程提交评分时，此内容将自动更新。';
$string['colorrating'] = '评分颜色';
$string['colorratingconfig'] = '为获得更佳视觉效果，此颜色通常应比星星颜色稍深';
$string['colorstar'] = '星星颜色';
$string['courserating:delete'] = '删除课程评分与评论，查看被标记评论';
$string['courserating:rate'] = '为课程评分';
$string['courserating:reports'] = '查看课程评分报表';
$string['coursereviews'] = '课程评论';
$string['datasource_courseratings'] = '课程评分';
$string['deleterating'] = '永久删除';
$string['deletereason'] = '删除原因';
$string['displayempty'] = '无评分时显示灰色星星';
$string['displayemptyconfig'] = '当课程启用了评分但尚无评分时，显示灰色星星。若不选中，则此类课程不显示评分。';
$string['editrating'] = '编辑你的评分';
$string['entity_rating'] = '用户课程评分';
$string['entity_summary'] = '课程评分汇总';
$string['event:flag_created'] = '课程评分被标记';
$string['event:flag_deleted'] = '课程评分标记被撤销';
$string['event:rating_created'] = '课程评分已创建';
$string['event:rating_deleted'] = '课程评分已删除';
$string['event:rating_updated'] = '课程评分已更新';
$string['flagrating'] = '标记';
$string['parentcss'] = '父元素 CSS 选择器';
$string['parentcssconfig'] = '课程评分将显示在与此选择器匹配的 DOM 元素中，并作为其最后一个子元素。若站点使用自定义主题并希望指定自定义父元素，可覆盖此值。留空时默认使用 "#page-header"。';
$string['percourseoverride'] = '课程级覆盖';
$string['percourseoverrideconfig'] = '启用后将创建一个自定义课程字段，可用于设置每门课程何时允许评分。"课程何时可评分" 设置值将作为默认值。';
$string['pluginname'] = '课程评分';
$string['privacy:metadata:tool_courserating:reason'] = '原因';
$string['privacy:metadata:tool_courserating:reasoncode'] = '原因代码';
$string['privacy:metadata:tool_courserating:timecreated'] = '创建时间';
$string['privacy:metadata:tool_courserating:timemodified'] = '修改时间';
$string['privacy:metadata:tool_courserating_flag'] = '被标记评分';
$string['privacy:metadata:tool_courserating_flag:id'] = 'ID';
$string['privacy:metadata:tool_courserating_flag:ratingid'] = '评分 ID';
$string['privacy:metadata:tool_courserating_flag:userid'] = '用户 ID';
$string['privacy:metadata:tool_courserating_rating'] = '课程评分';
$string['privacy:metadata:tool_courserating_rating:cohortid'] = '课程 ID';
$string['privacy:metadata:tool_courserating_rating:hasreview'] = '是否有评论';
$string['privacy:metadata:tool_courserating_rating:id'] = 'ID';
$string['privacy:metadata:tool_courserating_rating:rating'] = '评分';
$string['privacy:metadata:tool_courserating_rating:review'] = '评论';
$string['privacy:metadata:tool_courserating_rating:timecreated'] = '创建时间';
$string['privacy:metadata:tool_courserating_rating:timemodified'] = '修改时间';
$string['privacy:metadata:tool_courserating_rating:userid'] = '用户';
$string['ratebyanybody'] = '学生可随时为课程评分';
$string['ratebycompleted'] = '学生仅在完成课程后可评分';
$string['ratebydefault'] = '默认值："{$a}"';
$string['ratebynoone'] = '课程评分已禁用';
$string['ratedcategory'] = '允许课程评分的课程分类';
$string['rating'] = '评分';
$string['rating_actions'] = '操作';
$string['rating_hasreview'] = '含评论';
$string['rating_nofflags'] = '标记数量';
$string['rating_rating'] = '课程评分';
$string['rating_review'] = '评论';
$string['rating_timecreated'] = '创建时间';
$string['rating_timemodified'] = '修改时间';
$string['ratingasstars'] = '以星级显示课程评分';
$string['ratingdeleted'] = '评分已删除';
$string['ratinglabel'] = '课程评分';
$string['ratingmode'] = '课程何时可评分';
$string['ratingmodeconfig'] = '另外还会检查课程评分能力权限';
$string['reindextask'] = '课程评分重建索引';
$string['review'] = '评论（可选）';
$string['reviewsarehidden'] = '学生只能看到平均评分，无法查看评论文本。';
$string['revokeratingflag'] = '撤销';
$string['settingsdescription'] = '修改某些设置后，可能需要对所有课程及课程评分重新建立索引。该操作将在下次 cron 运行时自动执行。';
$string['showallratings'] = '显示全部';
$string['showallreviewsforrating'] = '正在显示 {$a} 星评分的评论。';
$string['showmorereviews'] = '显示更多';
$string['summary_avgrating'] = '课程评分';
$string['summary_cnt01'] = '1 星评分占比';
$string['summary_cnt02'] = '2 星评分占比';
$string['summary_cnt03'] = '3 星评分占比';
$string['summary_cnt04'] = '4 星评分占比';
$string['summary_cnt05'] = '5 星评分占比';
$string['summary_cntall'] = '评分总数';
$string['summary_cntreviews'] = '评论总数';
$string['summary_ratingmode'] = '课程评分模式';
$string['summary_sumrating'] = '评分总和';
$string['usehtml'] = '评论使用富文本编辑器';
$string['usehtmlconfig'] = '允许学生在评论中使用富文本编辑器、添加链接及附件。';
$string['usersflagged'] = '{$a} 位用户已将该评论标记为不当/冒犯内容。';
$string['viewallratings'] = '查看全部评分';
$string['viewallreviews'] = '查看全部评论';
$string['youflagged'] = '你已将该评论标记为不当/冒犯内容。';
