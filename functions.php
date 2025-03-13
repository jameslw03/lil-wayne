<?php
function calculateRedBarWidth($score, $maxScore)
{
  // Constants
  $pillWidth = 47;  // Width of one full pill
  $totalWidth = 260; // Total bar width
  $numPills = 5;     // Number of pills

  // Calculate gap width
  $gapWidth = ($totalWidth - ($pillWidth * $numPills)) / ($numPills - 1);

  // Number of full pills
  $fullPills = floor($score / 5);
  $remainingScore = $score % 5;

  // Width calculation
  $fullWidth = $fullPills * $pillWidth;

  // ✅ Fix: Only add gaps between pills, not after the last one
  $gapWidthTotal = ($fullPills < $numPills) ? $fullPills * $gapWidth : ($numPills - 1) * $gapWidth;

  $remainingWidth = $remainingScore * ($pillWidth / 5);

  // Final width
  $redBarWidth = $fullWidth + $gapWidthTotal + $remainingWidth;

  return $redBarWidth;
}
